namespace ConsoleApp1;
using System;
public static class MyClass
{
    public static void Main()
    {
        Console.Write("a=");
        int a = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("b=");
        int b = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("c=");
        int c = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine("{0}+{1}+{2}={3}", a,b,c, a+b+c);
    }
}