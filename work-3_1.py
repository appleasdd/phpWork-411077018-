import pandas as pd
df = pd.read_csv('/content/edu_bigdata_imp1.csv',encoding = 'big5',low_memory = False)
df_filtered = df[(df['dp001_record_plus_view_action'] == 'paused') & (df['PseudoID'] == 71)]
print(len(df_filtered))