namespace ConsoleApp1;

public class lab9
{
    static void Main(string[] args)
    {
        Console.Write("a= ");
        double a = Double.Parse(Console.ReadLine());
        Console.Write("b= ");
        double b = Double.Parse(Console.ReadLine());
        Console.Write("h= ");
        double h = Double.Parse(Console.ReadLine());
        double y = 0;
        int i = 1;
        Console.WriteLine("{0,3} {1,5} {1,5}", "#", "x", "f(x)");
        for (double x = a; x <= b; x += h, ++i)
        {
            if (x >= 0.9)
            {
                y = 1 / (Math.Pow(0.1 + x, 2));                    
            }
            else if (x < 0.9 && x >= 0)
            {
                y = 0.2 * x + 0.1;                   
            }
            else if (x < 0)
            {
                y = Math.Pow(x, 2) + 0.2;                    
            }
            Console.WriteLine("{0,3} {1,5:f2} {2,5:f2}", i, x, y);
        }
        Console.ReadKey();
    }
}