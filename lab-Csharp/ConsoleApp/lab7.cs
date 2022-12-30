namespace ConsoleApp1;

public class lab7
{
    class Program
    {
        static void Main(string[] args)
        {
            //1
            for (int i = 1; i <= 21; i+=2)
            {
                Console.Write(i + " ");
            }
            //2
            int j = 1;
            while (j <= 21)
            {
                Console.Write(j + " ");
                j = j + 2;
            }
            //3
            int k = 1;
            do
            {
                Console.Write(k + " ");
                k = k + 2;
            }
            while (k <= 21);
 
            Console.ReadKey();
        }
    }
}