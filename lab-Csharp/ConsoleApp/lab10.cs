namespace ConsoleApp1;

public class lab10
{
    public static void Main()
        {
            int l = Combination(5, 10);
            Console.WriteLine(l);
        }
    public static int Combination(int m, int n)
        {
            int c = 0;
            if (n == 0)
                return 0;
            if ((m == 0 || m == n))
                return 1;
            if ((n > m) && (m > 0))
            {
                c = Factorial(n) / (Factorial(m) * Factorial(n - m));
            }
            return c;
        }
        public static int Factorial(int n)
        {
            if (n == 0)
                return 1;
            return n * Factorial(n - 1);
        }
}