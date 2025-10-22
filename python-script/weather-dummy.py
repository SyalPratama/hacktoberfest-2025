import random

def get_weather(city):
    weathers = ["Cerah", "Mendung", "Hujan", "Gerimis", "Badai"]
    temp = random.randint(20, 35)
    print(f"Cuaca di {city}: {random.choice(weathers)}, {temp}°C")

if __name__ == "__main__":
    city = input("Masukkan nama kota: ")
    get_weather(city)
