namespace ConsoleApp1;

public class lab21_22
{
    static void Main(string[] args)
    { Console.Write("a= ");
        double a=double.Parse(Console.ReadLine());
        Console.Write("b= ");
        double b=double.Parse(Console.ReadLine());
        Console.Write("h= ");
        double h=double.Parse(Console.ReadLine());
        //Записываем в файл t.dat вещественные числа из заданного диапазона 
        FileStream f = new FileStream("t.dat",FileMode.Open);
        BinaryWriter fOut = new BinaryWriter(f);
        for (double i = a; i <= b; i += h) 
        {
            fOut.Write(i);;
        }
        fOut.Close();
        //Объекты f и fIn связаны с одним и тем же фай-лом 
        f = new FileStream("t.dat",FileMode.Open);
        BinaryReader fIn=new BinaryReader(f);
        long m = f.Length; //определяем количество байт в потоке
        //Читаем данные из файла t.dat начиная с элемента с номером 1, т.е с 8 байта,
        //перемещая внутренний указатель на 16 байт, т.е. на два вещественных числа
        for (long i = 8; i < m; i += 16)
        { f.Seek(i,SeekOrigin.Begin); 
            a = fIn.ReadDouble();
            Console.Write("{0:f2} ",a);
        }
        fIn.Close();
        f.Close();
        Console.ReadKey();
    }
}