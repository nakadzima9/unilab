namespace ConsoleApp1;
using System;
public class Lab6
{
    private int GetInt(string s, ref int startIndex)
    {
        int index = s.IndexOf(' ', startIndex + 1);
        if (index == -1)
            index = s.Length;
        int value = int.Parse(s.Substring(startIndex, index - startIndex));
        startIndex = index;
        return value;
    }
    string str = "12 14 20";
    int startIndex = 0;
    int val1 = GetInt(str, ref startIndex);            
    int val2 = GetInt(str, ref startIndex);
    int val3 = GetInt(str, ref startIndex);
}
