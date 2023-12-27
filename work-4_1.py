import pandas as pd
df = pd.read_csv('/content/edu_bigdata_imp1.csv',encoding = 'big5',low_memory = False)
df_filtered = df['dp001_review_sn'].value_counts()
df_filtered = df_filtered.idxmax()
df_filtered = int(df_filtered)
print(df_filtered)