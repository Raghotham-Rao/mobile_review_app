from mysql import connector
import json

dstring = ""
with open("pages/phone_details.json") as f:
    for i in f:
        dstring += i

data = json.loads(dstring);

conn = connector.connect(host="localhost", user="root", passwd='strictlymine', database='phone_review')

cur = conn.cursor()

query = "insert into devices values(%s,%s,%s,%s,%s)"

for phone in data:
    rel_date = data[phone]["LAUNCH"]["Announced"]
    rating = float(data[phone]["Overall"])
    img = data[phone]["images"][0]
    vals = tuple([phone, phone.split()[0], rel_date, rating, img])
    cur.execute(query, vals)

conn.commit()