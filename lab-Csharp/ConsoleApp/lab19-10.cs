namespace ConsoleApp1;

public class lab19_10
{
    static void Main()
    {
        string s = Console.ReadLine();
        FileInfo F = new FileInfo(s);
        if (F.Exists)
        {
            Console.WriteLine(Path.GetFileName(s));
        }
        else Console.WriteLine("Такого файла нет");
        Console.ReadLine();
    }
}