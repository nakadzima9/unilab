a = [1, 5, 4, 3, 7, 9]

def add_first_element(element):

    b = a[::-1]
    b.append(element)
    b = b[::-1]
    return b

# print(add_first_element(a, 6))

def add_element_by_index(element, index):
    
    first_half = a[:index]
    second_half = a[index:]
    first_half.append(element)
    first_half += second_half
    return first_half

# print(add_element_by_index(a, 3, 6))

def add_last_element(element):

    a.append(element)
    return a

# print(add_last_element(a, 7))

def next_element_of(element):
    if a.index(element) == len(a) - 1:
        return a[0]
    else:
        return a[a.index(element) + 1]

# print(next_element_of(9))

def scan_list(n):
    i = 0
    counter = 0
    while True:
        if counter == int(n):
            break
        if i == len(a):
            i = 0
            counter += 1
        else:
            print("Текущий элемент:", a[i], "Индекс элемента в списке:", i)
            i += 1
# scan_list(1)


print("Добавить первый элемент: add_first <Значение>")
print("Добавить элемент в конец списка: add_last <Значение>")
print("Добавить элемент по индексу: add_by_index <Значение> <Индекс>")
print("Следующий элемент после выбранного: next_of_element <Значение>")
print("Пройтись по всем элементам списка n раз: scan_list <Значение n>")
print("Чтобы прекратить работу со списком: quit")
while True:
    action = input("Какую операцию вы хотите произвести с циклическим списком? ").split(" ")
    if action[0] == "quit":
        break
    elif action[0] == "add_first":
        a = add_first_element(action[1])
        print("Элемент успешно добавлен в начало списка!")
    elif action[0] == "add_last":
        a = add_last_element(action[1])
        print("Элемент успешно добавлен в конец списка")
    elif action[0] == "add_by_index":
        a = add_element_by_index(action[1], action[2])
        print("Элемент успешно добавлену по индексу", action[2])
    elif action[0] == "next_of_element":
        print("Следующим элементом после {} идет {}".format(action[1], next_element_of(action[1])))
    elif action[0] == "scan_list":
        scan_list(action[1])
    else:
        print("Вы ввели некорректную команду!")