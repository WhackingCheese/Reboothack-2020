from datetime import datetime
import json
import random
import copy

users = ["audurmargret", "booninja", "Stimmikex", "thth16", "whackingcheese"]
user_entry = {
    "username": None,
    "password": None,
    "time": None,
    "cookie_id": None,
    "session_id": None
}

db = json.load(open("website/demo_db.json", "r"))

db["company_id"] = 1
db["clicks"] = len(users)
db["number_phished"] = len(users)

for i in range(len(users)):
    item = copy.deepcopy(user_entry)
    item["username"] = users[i]
    item["password"] = "secret"
    item["time"] = datetime.now().strftime("%d/%m/%Y %H:%M:%S")
    item["cookie_id"] = random.randint(0, 999999999)
    item["session_id"] = random.randint(0, 999999999)
    db["phished"].append(item)

json.dump(db, open("website/demo_db.json", "w"))