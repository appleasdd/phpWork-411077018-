import pandas as pd
df = pd.read_csv('/content/edu_bigdata_imp1.csv',encoding = 'big5',low_memory = False)
df_filtered = df[(df['dp001_prac_score_rate'] == 100) & (df['PseudoID'] == 281)]
print(len(df_filtered))