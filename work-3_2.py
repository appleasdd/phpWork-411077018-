import pandas as pd
df_filtereda = []
df = pd.read_csv('/content/edu_bigdata_imp1.csv',encoding = 'big5',low_memory = False)
df_filtered = df[df['PseudoID'] == 71]
df_filtered = df_filtered.dropna(subset=['dp001_review_start_time'])
df_filtered = df_filtered['dp001_review_start_time'].unique()
for i in range(len(df_filtered)):
    df_filtered[i] = df_filtered[i].split()
    df_filtereda.append(df_filtered[i][0])
df_filtered = set(df_filtereda)
df_filtered = list(df_filtered)
for i in range(len(df_filtered)-1,-1,-1):
    print(df_filtered[i])