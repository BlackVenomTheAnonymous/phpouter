import requests
import base64
import datetime
import math

# Define your username and password
username = "<USER>"
password = "<PASS>"

# Make a POST request to obtain the token
url = "https://zwyr157wwiu6eior.com/v1/users/tokens"
headers = {
    "Accept": "application/json",
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36",
    "Pragma": "no-cache"
}
data = {
    "username": username,
    "password": password
}
response = requests.post(url, headers=headers, data=data)
token = response.json()["token"]

# Encode the token in Base64
token_encoded = base64.b64encode(f"token:{token}".encode("utf-8")).decode("utf-8")

# Make a GET request to the services endpoint
url = "https://zwyr157wwiu6eior.com/v1/users/services"
headers = {
    "Accept": "*/*",
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36",
    "Pragma": "no-cache",
    "Authorization": f"Basic {token_encoded}"
}
response = requests.get(url, headers=headers)

# Parse the expiry date and compute the days left
expiry_str = response.json()["services"][0]["expires_at"]
expiry = datetime.datetime.strptime(expiry_str, "%Y-%m-%d")
current_time = datetime.datetime.now()
days_left = math.ceil((expiry - current_time).days)

# Print the days left
print(f"You have {days_left} days left on your Premium plan.")
