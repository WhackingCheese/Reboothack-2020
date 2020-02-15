from datetime import datetime
import json
import random
import copy

COMP_NUMB = 10
COMP_USER_MIN = 10
COMP_USER_MAX = 100
EMP_CLICK_RATE = 0.4
EMP_PHISH_RATE = 0.5

c = {
    "company_id": None,
    "sent": None,
    "clicks": None,
    "number_phished": None,
    "phished": []
}

p = {
    "username": None,
    "password": None,
    "time": None,
    "cookie_id": None,
    "session_id": None,
}



db = json.loads("[]")

for i in range(COMP_NUMB):
    comp = json.loads(json.dumps(c))
    emp = random.randint(COMP_USER_MIN, COMP_USER_MAX)
    comp["company_id"] = f"company_{i}"
    comp["sent"] = emp
    comp["clicks"] = 0
    comp["number_phished"] = 0
    for j in range(emp):
        if(random.random() < EMP_CLICK_RATE):
            comp["clicks"] += 1
            if(random.random() < EMP_PHISH_RATE):
                comp["number_phished"] += 1
                phi = json.loads(json.dumps(p))
                phi["username"] = f"user_{j}"
                phi["password"] = "secret"
                phi["time"] = datetime.now().strftime("%d/%m/%Y %H:%M:%S")
                phi["cookie_id"] = random.randint(0, 999999999)
                phi["session_id"] = random.randint(0, 999999999)
                comp["phished"].append(phi)
    db.append(comp)

json.dump(db, open("database.json", "w"))