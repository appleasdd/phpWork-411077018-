import pandas as pd
df = pd.read_csv('/content/edu_bigdata_imp1.csv',encoding = 'big5',low_memory = False)
df_filtered = df['dp002_verb_display_zh_TW'].value_counts().head(3).index
for i in range(len(df_filtered)):
    print(df_filtered[i])