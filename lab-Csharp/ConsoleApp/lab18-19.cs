namespace ConsoleApp1;
using System;

public class lab18_19
{
    static void Main() {
        var str = "nlh86dt4m3k0k5";
        var result = str.Program();
        Console.WriteLine(result);
    }
  
}
static class Operatoins{
    public static double Program(this string str){
        double result = 0;
        for(int i = 0; i < str.Length; i++)
            if(char.IsDigit(str[i]))result += char.GetNumericValue(str[i]);
        return result;  
    }
}