namespace ConsoleApp1;
// Одномерный
public class lab11
{
    static int[] Input()
        {
            Random rnd = new Random();
            Console.Write("Введите размерность массива: ");
            int n = int.Parse(Console.ReadLine());
            int[] a = new int[n];
            for (int i = 0; i < n; ++i)
            {
                a[i] = rnd.Next(0, 9);
            }
            return a;
        }
    static int Numb()
        {
            Console.Write("Число для сравнения: ");
            int n = int.Parse(Console.ReadLine());
            return n;
        }
    static void Print(int[] a)
        {
            for (int i = 0; i < a.Length; ++i) 
                Console.Write("{0} ", a[i]);
            Console.WriteLine();
        }
        static string Change(int[] a, int n)
        {
            string str = "";
            for (int i = 0; i < a.Length; ++i)
                if (a[i] > n) str+=(i+1).ToString();
            return str;
        }

        static void Main(string[] args)
        {
            int[] myArray = Input();
            int n = Numb();
            Console.Write("Массив: ");
            Print(myArray);
            string s = Change(myArray, n);
            Console.Write("Больше искомого числа элементы со следующими номерами: {0}", s);
            Console.ReadKey();
        }
}