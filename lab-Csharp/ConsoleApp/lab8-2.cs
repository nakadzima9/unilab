namespace ConsoleApp1;

public class lab8_2
{
    private static void Main()
    {
        int x = 5;
        int y = 3;
        int z = max(x, 2 * y - x) + max(5 * x + 3 * y, y);
        Console.WriteLine(z);
    }
 
    private static int max(int p0, int p1)
    {
        return p0 > p1 ? p0 : p1;
    }
}