import requests
import json

# URL of the PHP server endpoint
url = "http://localhost/homeland/idk.php"  # Replace with the actual URL of your PHP script

# Function to test the GET request
def test_get_request():
    print("Testing GET request...")
    response = requests.get(url)
    
    if response.status_code == 200:
        print("GET response (200 OK):")
        print(json.dumps(response.json(), indent=4))
    else:
        print(f"GET failed with status code {response.status_code}")
        print(response.text)

# Function to test the POST request
def test_post_request():
    print("\nTesting POST request...")
    new_user = {
        "name": "Alice",
        "age": 28,
        "email": "alice@example.com"
    }

    headers = {"Content-Type": "application/json"}
    response = requests.post(url, data=json.dumps(new_user), headers=headers)

    if response.status_code == 200:
        print("POST response (200 OK):")
        print(json.dumps(response.json(), indent=4))
    else:
        print(f"POST failed with status code {response.status_code}")
        print(response.text)

# Run the tests
if __name__ == "__main__":
    test_get_request()
    test_post_request()
