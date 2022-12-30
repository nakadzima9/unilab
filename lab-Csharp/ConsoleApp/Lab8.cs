namespace ConsoleApp1;
using System;
public class Lab8
{
    static void Main(string[] args)
    {
        Console.Write("x=");
        double x = double.Parse(Console.ReadLine());
        double y = 0;
        for (int i = 1; i <= 3; i++)
        {
            y += f(2 * i, x);
        }
        Console.WriteLine("y=" + y);
        Console.Read();
    }
    static double f(int n, double x)
    {
        return Math.Pow(x, n) / n;
    }
}