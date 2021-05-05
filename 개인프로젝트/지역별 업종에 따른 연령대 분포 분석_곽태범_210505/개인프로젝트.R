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
welfare2 = rename(f,
                 region = h15_reg7,
                 gender = h1501_4,
                 age = h1501_5,
                 working_ability = h1503_2,
                 main_working_status = h1503_4,
                 category_business = h1503_7
)
summary(welfare2$age)

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
s = 1
sorted = c(3,8,34,35,39,42,47,52,56,63,68,73,76,84,85,87,91,96,98,99)
for (i in 1:99){
  if (i > sorted[s]){
    s = s+1
    welfare$business[welfare$business == i] = business[s]
  }
  else{
    welfare$business[welfare$business == i] = business[s]
  }
}


# 필요하지 않은 데이터 제거
welfare = welfare %>% filter(!working_ability == '근로 불가')
welfare = welfare %>% filter(!is.na(business))
welfare = welfare %>% filter(!parti_status == '비경제 활동인구')

# 극단치 확인
ggplot(data = welfare, aes(x = age,y = region)) + geom_boxplot()+ggtitle("전체 연령별 지역 분포")+
  theme(plot.title = element_text(family = "serif", face = "bold", hjust = 0.5, size = 15, color = "darkblue"))

# 전처리 완료

# factor로 형변환
welfare$region = as.factor(welfare$region)
welfare$gender = as.factor(welfare$gender)
welfare$working_ability = as.factor(welfare$working_ability)
welfare$parti_status = as.factor(welfare$parti_status)
welfare$business = as.factor(welfare$business)


# 전체 데이터의 통계 및 구조
summary(welfare)
str(welfare)
dim(welfare)

# 각 업종의 지역별 연령 분포 산점도로 그리기
for (i in 1:20){
  # 업종
  print('업종 : ')
  print(business[i])
  busin = welfare[welfare$business == business[i],]
  
  # 해당 업종에 종사하고 있는 인원
  print('해당 업종에 종사하고 있는 인원')
  print(table(busin$region))
  
  # 지역별 평균 연령대
  print('지역별 평균 연령대')
  aggre_busin = aggregate(busin$age,list(busin$region),mean)
  print(aggre_busin)
  
  
  gg = ggplot(data = busin, aes(x = region,y = age))+ geom_point(color = 'red') +
    ggtitle(business[i],"지역별 연령 분포")+
    theme(plot.title = element_text(family = "serif", face = "bold", hjust = 0.5, size = 15, color = "darkblue"))
  print(gg+geom_line(data = aggre_busin,aes(x = Group.1, y = x),color = 'blue',group = 1))
}


summary(welfare$age)


region_dos = table(welfare$region) # 지역별 인원
region_dos
region_dos = as.data.frame(region_dos)

region_dos = rename(region_dos,
                    region = Var1,
                    '인원' = Freq)

region_dos$'상대도수' = round(region_dos$인원/sum(region_dos$인원),3) # 상대도수 컬럼 생성
region_dos

# ggplot을 이용한 pie 그래프
ggplot(region_dos,aes(x="",y=상대도수,fill=region))+
  geom_bar(width = 1, stat = "identity", color = "white")+
  coord_polar("y")+
  geom_text(aes(label = paste0(round(상대도수*100,1),"%")),
            position = position_stack(vjust = 0.5))+
  ggtitle("지역별 인원")+
  theme(plot.title = element_text(family = "serif", face = "bold", hjust = 0.5, size = 15, color = "darkblue"))


