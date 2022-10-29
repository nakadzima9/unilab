

#
# class circular_list:
#     pass
#
#
#
#
# class doubly_linked_list:
#     def __init__(self, data, head , tail):
#         self.data = data
#         self.head = head
#         self.tail = tail
#
#     def remove_left(self, item):
#         pass
#
#     def remove_right(self, item):
#         pass
#
#     def add(self, index, item):
#         ref1 = self
#         if index > 1:
#             ref1 = self.tail
#             for i in range(index-1):
#                 ref1 = ref1.tail
#         ref1.tail = linked_list(item, ref1.tail)
#
#     def get_data(self):
#         pass
#
#     def search(self, item):
#         pass



class linked_list:
    def __init__(self, head, tail):
        self.head = head
        self.tail = tail

    def remove(self, item):
        ref1 = self.tail
        ref2 = ref1

        if ref1 is None:
            return None

        while ref1:
            if ref1.head == item:
                ref2.tail = ref1.tail
                break
            ref2 = ref1
            ref1 = ref1.tail


    def add(self, index ,item):
        ref1 = self
        if index > 1:
            ref1 = self.tail
            for i in range(index-1):
                ref1 = ref1.tail
        ref1.tail = linked_list(item, ref1.tail)

    def add_end(self, item):
        ref1 = self

        if self.tail is not None:
            ref1 = self.tail

        while True:
            if ref1.tail is None:
                break
            ref1 = ref1.tail
        ref1.tail = linked_list(item, None)

    def add_start(self, item):
         return linked_list(item, self)

    def get_head(self):
        return self.head

    def get_data(self):
        ref1 = self.tail
        result = list([self.head])
        while ref1:
            result.append(ref1.head)
            ref1 = ref1.tail
        return result

    def search(self, item):
        ref1 = self
        while ref1:
            if ref1.head == item:
                return True
            ref1 = ref1.tail
        return False



class Turn:
    def __init__(self):
        self.data = list()

    def enqueue(self, item):
        self.data.append(item)

    def dequeue(self, item):
        if self.data:
            return self.data.pop(0)



class Stack:
    def __init__(self):
        self.data = list()

    def push(self, item):
        self.data.append(item)

    def pop(self):
        if self.data:
            return self.data.pop()



