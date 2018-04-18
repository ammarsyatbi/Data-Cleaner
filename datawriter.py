import sqlite3
import csv


conn = sqlite3.connect('GE14.sqlite')
curs = conn.cursor()

query = 'SELECT * FROM Tweets'
#rows = curs.execute(query)
rows = curs.execute(query)

with open('clean1GE14.csv','w',encoding="utf-8") as csv_file:
    writer = csv.writer(csv_file, delimiter =',')
    for row in rows:
        #writeRow = (row['username'])
        writer.writerow((row[2],row[1]))

# df = pd.DataFrame(centroids)
#
# # attribute selection
# # dataset = df[['', 'Date', 'Symbol', 'Open', 'High', 'Low', 'Volume', 'Market Cap']]
# out = df.to_json(orient='records')
#
# with open('centroid.json', 'w') as f:
#     f.write(out)