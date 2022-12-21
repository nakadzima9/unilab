class Queue:

    def __init__(self):
        self.items = []

    def add_to_queue(self, element):
        self.items.append(element)
        print("Элемент", element, "успешно добавлен!")

    def get_element(self):
        a = self.items[::-1]
        deleted = a.pop()
        self.items = a[::-1]
        print("Элемент", deleted, "успешно удален")
        return deleted

    def get_queue_size(self):
        print("Длина очереди равна", len(self.items))
        return len(self.items)

    def is_empty(self):
        if self.items == []:
            print("Очередь пуста")
        else:
            print("Очередь не пуста")
        return self.items == []

    def clear_queue(self):
        while self.items != []:
            self.items.pop()
        print("Очередь успешно очищена!")

a = Queue()
actionsDict = {
    "add": a.add_to_queue,
    "pop": a.get_element,
    "clear": a.clear_queue,
    "getSize": a.get_queue_size,
    "isEmpty": a.is_empty,
}

print("Добавить элемент: add 'Значение'")
print("Взять первый элемент: pop")
print("Очистить очередь: clear")
print("Узнать размер очереди: getSize")
print("Проверить очередь на пустоту: isEmpty")
print("Выход - quit")
while True:
    action = input("Какую операцию вы хотите произвести с очередью? ").split(" ")
    if action[0] == "quit":
        break
    elif len(action) > 1:
        actionsDict[action[0]](action[1])
    else:
        actionsDict[action[0]]()