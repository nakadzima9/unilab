class Deck:

    def __init__(self):
        self.items = []

    def add_to_deck_start(self, element):
        self.items.reverse()
        self.items.append(element)
        self.items.reverse()

    def get_element_start(self):
        self.items.reverse()
        deleted = self.items.pop()
        self.items.reverse()
        return deleted

    def add_to_deck_end(self, element):
        self.items.append(element)

    def get_element_end(self):
        deleted = self.items.pop()
        return deleted

    def get_deck_size(self):
        return len(self.items)

    def is_empty(self):
        return self.items == []

    def clear_deck(self):
        while self.items != []:
            print(self.items.pop)

b = Deck()

print("Добавить элемент в конец: addEnd 'Значение'")
print("Добавить элемент в начало: addStart 'Значение'")
print("Взять верхний элемент: popEnd")
print("Взять нижний элемент: popStart")
print("Очистить дэк: clear")
print("Узнать размер дэка: getSize")
print("Проверить дэка на пустоту: isEmpty")
print("Выход - quit")
while True:
    action = input("Какую операцию вы хотите произвести с очередью? ").split(" ")
    if action[0] == "quit":
        break
    elif action[0] == "addStart":
        b.add_to_deck_start(action[1])
        print("Элемент", action[1],"успешно добавлен!")
    elif action[0] == "addEnd":
        b.add_to_deck_end(action[1])
        print("Элемент", action[1],"успешно добавлен!")
    elif action[0] == "popStart":
        if b.items == []:
            print("Взять элемент невозможно! Дэк пуст!")
        else:
            print("Элемент", b.get_element_start(), "удален из дэка!")
    elif action[0] == "popEnd":
        if b.items == []:
            print("Взять элемент невозможно! Очередь пуста!")
        else:
            print("Элемент", b.get_element_end(), "удален из дэка!")
    elif action[0] == "clear":
        b.clear_deck()
        print("Дэк успешно очищен!")
    elif action[0] == "getSize":
        print("Длина дэка равна", b.get_deck_size())
    elif action[0] == "isEmpty":
        if b.is_empty():
            print("Дэк пуст!")
        else:
            print("Дэк не пуст!")
    else:
        print("Функция {} не является встроенной функцией дэка!".format(action[0]))