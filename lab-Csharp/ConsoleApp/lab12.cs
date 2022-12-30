namespace ConsoleApp1;
// Двумерный
public class lab12
{
    static int[,] Input(out int n, out int m)
        {
            Random rnd = new Random();
            Console.WriteLine("Введите размерность массива ");
            Console.Write("n = ");
            n = int.Parse(Console.ReadLine());
            Console.Write("m = ");
            m = int.Parse(Console.ReadLine());
            int[,] a = new int[n, m];
            for (int i = 0; i < n; ++i)
            {
                for (int j = 0; j < m; ++j)
                {
                    a[i, j] = rnd.Next(0, 9);
                }
            }
            return a;
        }
        static int Numb()
        {
            Console.Write("Число для сравнения: ");
            int n = int.Parse(Console.ReadLine());
            return n;
        }
        static void Print(int[,] a)
        {
            for (int i = 0; i < a.GetLength(0); ++i, Console.WriteLine())
            for (int j = 0; j < a.GetLength(1); ++j)
                Console.Write("{0} ", a[i, j]);
        }
        static string Change(int[,] a, int n)
        {
            string s = "";
            for (int i = 0; i < a.GetLength(0); ++i)
            {
                for (int j = 0; j < a.GetLength(1); ++j)
                {
                    if (a[i, j] > n) { s += "\n[" + (i + 1) + "], [" + (j + 1) + "]"; }
                }
            }
            return s;
        }
        static void Main(string[] args)
        {
            int n, m, i;
            int[,] myArray = Input(out n, out m);
            i = Numb();
            Console.WriteLine("Исходный массив:");
            Print(myArray);
            string s = Change(myArray, i);
            Console.Write("Больше искомого числа элементы со следующими номерами: {0}", s);
            Console.ReadKey();
        }
}