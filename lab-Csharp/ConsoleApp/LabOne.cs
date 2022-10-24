namespace ConsoleApp;
using System;
public static class Labs
{
    public static void Main()
    {
        //Зона для запуска задач
    }

    public static void Task1()
    {
        Console.Write("a=");
        int a = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("b=");
        int b = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("c=");
        int c = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine("{0}+{1}+{2}={3}", a,b,c, a+b+c); 
    }
    public static void Task2()
    {
        Console.Write("p=");
        float p = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        float a = p / 3;
        Console.WriteLine(Math.Sqrt(3)/4 * (a*a));
    }
    public static void Task3()
    {
        Console.Write("a=");
        int a = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("b=");
        int b = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("c=");
        int c = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("d=");
        int d = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(Math.Sqrt(Math.Pow(a-b,2)+Math.Pow(c-d,2)));
    }
    public static void Task4()
    {
        Console.Write("first number=");
        float a = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("second number=");
        float b = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine( (Math.Pow(a,3)+Math.Pow(b,3))/2 );
    }
    public static void Task5()
    {
        Console.Write("first number=");
        float a = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("second number=");
        float b = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine((Math.Abs(a)*Math.Abs(b))/2);
    }
    public static void Task6()
    {
        Console.Write("a=");
        float a = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("b=");
        float b = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(Math.Sqrt(Math.Pow(a,2)+Math.Pow(b,2)));
    }
    public static void Task7()
    {
        Console.Write("a=");
        float a = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("b=");
        float b = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine((a * b)/2);
    }
    public static void Task8()
    {
        Console.Write("a=");
        float a = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("b=");
        float b = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine((a+b+Math.Sqrt(Math.Pow(a,2)+Math.Pow(b,2))));
    }
    public static void Task9()
    {
        Console.Write("s=");
        float s = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(Math.Sqrt(s/6));
    }
    public static void Task10()
    {
        Console.Write("v=");
        double v = double.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(Math.Pow(v, (double)1/3));
    }
    public static void Task11()
    {
        Console.Write("x1=");
        float x1 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("y1=");
        float y1 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("x2=");
        float x2 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("y2=");
        float y2 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("x3=");
        float x3 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("y3=");
        float y3 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        //lambda function
        var lfunc = (float a, float b, float c, float d) => Math.Sqrt(Math.Pow(a-b,2)+Math.Pow(c-d,2));
        Console.WriteLine(lfunc(x1,y1,x2,y2)+lfunc(x2,y2,x3,y3)+lfunc(x3,y3,x1,y1));
    }
    public static void Task12()
    {
        Console.Write("x1=");
        float x1 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("y1=");
        float y1 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("x2=");
        float x2 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("y2=");
        float y2 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("x3=");
        float x3 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("y3=");
        float y3 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        //lambda function
        var lfunc = (float a, float b, float c, float d) => Math.Sqrt(Math.Pow(a-c,2)+Math.Pow(b-d,2));
        double a = lfunc(x1, y1, x2, y2);
        double b = lfunc(x2, y2, x3, y3);
        double c = lfunc(x3, y3, x1, y1);
        double p = (a + b + c) / 2;
        Console.WriteLine(Math.Sqrt(p*(p-a)*(p-b)*(p-c)));
    }
    public static void Task13()
    {
        Console.WriteLine(Math.Sqrt(1 / Math.PI));
    }
    public static void Task14()
    {
        Console.Write("s=");
        double s = double.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(s/(Math.PI*2));
    }
    public static void Task15()
    {
        Console.Write("a=");
        float a = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("b=");
        float b = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("Alpha=");
        int A = int.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(((b*b)-(a*a)*Math.Tan(A))/2);
    }
    public static void Task16()
    {
        Console.Write("r1=");
        float r1 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("r2=");
        float r2 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(Math.PI*(r1*r1 - r2*r2));
    }
    public static void Task17()
    {
        Console.Write("a=");
        float a = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(a/(2*Math.Sqrt(3)));
    }
    public static void Task18()
    {
        Console.Write("a=");
        float a = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine(a/Math.Sqrt(3));
    }
    public static void Task19()
    {
        Console.Write("a1=");
        float a1 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("d=");
        float d = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("n=");
        float n = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine((n * (2 * a1 + (n-1) * d))/2);
    }
    public static void Task20()
    {
        Console.Write("b1=");
        float b1 = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("q=");
        float q = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.Write("n=");
        float n = float.Parse(Console.ReadLine() ?? throw new InvalidOperationException());
        Console.WriteLine((b1 * (1 - Math.Pow(q,n)))/(1-q));
    }
}
