class Stack:

    def __init__(self):
        self.items = []

    def add_to_stack(self, element):
        self.items.append(element)
        print("Элемент", element, "успешно добавлен!")

    def get_top_element(self):
        if self.items == []:
            print("Взять верхний элемент невозможно! Стэк пуст!")
        else:
            deleted = self.items.pop()
            print("Элемент", deleted, "успешно удален!")
            return deleted

    def get_stack_size(self):
        print("Длина стэка равна", len(self.items))
        return len(self.items)

    def is_empty(self):
        if self.items == []:
            print("Стэк пуст!")
        else:
            print("Стэк не пуст!")
        return self.items == []

    def clear_stack(self):
        while self.items != []:
            self.items.pop()
        print("Стэк успешно очищен!")

a = Stack()
actionsDict = {
    "push": a.add_to_stack,
    "pop": a.get_top_element,
    "clear": a.clear_stack,
    "getSize": a.get_stack_size,
    "isEmpty": a.is_empty,
}
print("Добавить элемент: push 'Значение'")
print("Взять верхний элемент: pop")
print("Очистить стэк: clear")
print("Узнать размер стэка: getSize")
print("Проверить стэк на пустоту: isEmpty")
print("Выход - quit")
while True:
    action = input("Какую операцию вы хотите произвести со стэком? ").split(" ")
    if action[0] == "quit":
        break
    elif len(action) > 1:
        actionsDict[action[0]](action[1])
    else:
        actionsDict[action[0]]()