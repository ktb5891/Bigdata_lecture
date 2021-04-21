getwd()
setwd("C:/Users/ktb58/OneDrive/바탕 화면/210308/14_R프로그래밍/개인프로젝트_복지패널/(2020년 15차 한국복지패널조사) 데이터(beta1.1)_spss")

# 패키지 준비
library(foreign)
library(dplyr)
library(ggplot2)
library(readxl)

# 데이터 불러오기 (가구용 데이터)
f = read.spss(file = "Koweps_h15_2020_beta1.sav",to.data.frame=T)

# 데이터 검토
head(f)
View(f)
dim(f)
str(f)
summary(f)

# 변수명 바꾸기
welfare = rename(f,
                 region = h15_reg7,
                 gender = h1501_4,
                 age = h1501_5,
                 working_ability = h1503_2,
                 main_working_status = h1503_4,
                 category_business = h1503_7
                 )
''' region = 지역
gender = 성별
age = 태어난 연도
working_ability = 근로 능력
main_working_status = 주된 경제활동 참여상태
category_business = 업종
'''

# 필요한 변수로만 이루어진 데이터 프레임 생성
welfare = data.frame(welfare$region,
                     welfare$gender,
                     welfare$age,
                     welfare$working_ability,
                     welfare$main_working_status,
                     welfare$category_business
                     )

welfare = rename(welfare,
                 region = welfare.region,
                 gender = welfare.gender,
                 age = welfare.age,
                 working_ability = welfare.working_ability,
                 parti_status = welfare.main_working_status,
                 business = welfare.category_business
                 )

# 데이터 재검토
head(welfare)
View(welfare)
str(welfare)
dim(welfare)
summary(welfare)
sum(is.na(welfare$region))
# 전처리
# 지역
region = c('서울','수도권(인천/경기)','부산/경남/울산','대구/경북','대전/충남',
           '강원/충북','광주/전남/전북/제주도')
for (i in 1:7){
  welfare$region[welfare$region == i] = region[i]
}

# 성별
welfare$gender = ifelse(welfare$gender == 1,'남','여')

# 나이
welfare$age = 2021-welfare$age

# 근로 능력 정도
ability = c('만 14세 이하','근로 가능','단순 근로 가능',
            '단순 근로 미약자','근로 불가')
for (i in 1:5){
  welfare$working_ability[welfare$working_ability == i-1] = ability[i]
}

# 주된 경제활동 참여 상태
status = c('상용직 임금근로자',
           '임시직 임금근로자',
           '일용직 임금근로자',
           '자활근로, 공공근로, 노인일자',
           '고용주',
           '자영업자',
           '무급가족종사자',
           '실업자(지난 4주간 적극적으로 구직활동을 함)',
           '비경제 활동인구')
for (i in 1:9){
  welfare$parti_status[welfare$parti_status == i] = status[i]
}

# 업종 대분류로 업종을 병합
business = c('농업,임업 및 어업','광업','제조업',
             '전기,가스,증기 및 공기 조절 공급업',
             '수도,하수 및 폐기물 처리, 원료 재생업',
             '건설업','도매 및 소매업','운수 및 창고업',
             '숙박 및 음식점업','정보통신업','부동산업',
             '전문,과학 및 기술 서비스업',
             '사업시설 관리, 사업 지원 및 임대 서비스업',
             '공공 행정,국방 및 사회보장 행정','교육 서비스업',
             '보건업 및 사회복지 서비스업',
             '예술,스포츠 및 여가관련 서비스업',
             '협회 및 단체, 수리 및 기타 개인 서비스업',
             '가구 내 고용활동 및 자가소비 생산활동','국제 및 외국기관')

welfare$business[welfare$business <= 3] = business[1]
welfare$business[welfare$business <= 8] = business[2]
welfare$business[welfare$business <= 34] = business[3]
welfare$business[welfare$business <= 35] = business[4]
welfare$business[welfare$business <= 39] = business[5]
welfare$business[welfare$business <= 42] = business[6]
welfare$business[welfare$business <= 47] = business[7]
welfare$business[welfare$business <= 52] = business[8]
welfare$business[welfare$business <= 56] = business[9]
welfare$business[welfare$business <= 63] = business[10]
welfare$business[welfare$business <= 68] = business[11]
welfare$business[welfare$business <= 73] = business[12]
welfare$business[welfare$business <= 76] = business[13]
welfare$business[welfare$business <= 84] = business[14]
welfare$business[welfare$business <= 85] = business[15]
welfare$business[welfare$business <= 87] = business[16]
welfare$business[welfare$business <= 91] = business[17]
welfare$business[welfare$business <= 96] = business[18]
welfare$business[welfare$business <= 98] = business[19]
welfare$business[welfare$business <= 99] = business[20]

# 필요하지 않은 데이터 제거
welfare = welfare %>% filter(!working_ability == '근로 불가')
welfare = welfare %>% filter(!is.na(business))
welfare = welfare %>% filter(!parti_status == '비경제 활동인구')

# 극단치 확인
ggplot(data = welfare, aes(x = age,y = region)) + geom_boxplot()+ggtitle("전체 연령별 지역 분포")+
  theme(plot.title = element_text(family = "serif", face = "bold", hjust = 0.5, size = 15, color = "darkblue"))

# 전처리 완료



# 농업,임업 및 어업의 연령별 업종 분포 산점도로 그리기
agric = welfare[welfare$business == '농업,임업 및 어업',]
gg = ggplot(data = agric, aes(x = region,y = age)) + geom_point(color = 'red')+ggtitle("농업,임업 및 어업의 연령별 업종 분포")+
  theme(plot.title = element_text(family = "serif", face = "bold", hjust = 0.5, size = 15, color = "darkblue"))
gg+geom_line(data = aggre_agric,aes(x = Group.1, y = x),color = 'blue')



table(agric$region)
mean(agric$age[agric$region == '광주/전남/전북/제주도'])
aggre_agric = aggregate(agric$age,list(agric$region),mean)
aggre_agric


''' 
관광데이터와 연관 가능
부동산 상권과 연관 가능
'''
