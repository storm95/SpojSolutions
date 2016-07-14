//anti - blots
#include<iostream>
#include<cstdio>
#include<string>
using namespace std;
int main()
{
        string s;
        int n,a,b,c,t,i;
        char ch;
        scanf("%d",&t);
        scanf("%c",&ch);
        while(t--)
        {
                scanf("%c",&ch);
                getline(cin,s);
                int len=s.size(),flag;
                flag=0;
                a=b=c=0;
                for(i=0;i<len&&s[i]!='+';++i)
                {
                        if(s[i]==' ')
                        ++i;
                        if(s[i]=='m')
                        {
                                flag=1;
                                while(s[i]!='+')
                                ++i;
                        }
                        if(s[i]=='+')
                        break;
                        a=a*10+s[i]-'0';
                }
                ++i;
                for(;i<len&&s[i]!='=';++i)
                {
                        if(s[i]==' ')
                        ++i; 
                        if(s[i]=='m')
                        {
                                flag=2;
                                while(s[i]!='=')
                                ++i;
                        }
                        if(s[i]=='=')
                        break;
                        b=b*10+s[i]-'0';
                }
                ++i;
                for(;i<len;++i)
                {
                        if(s[i]==' ')
                        ++i; 
                        if(s[i]=='m')
                        {
                                flag=3;
                                break;
                        }
                         if(i>=len)
                        break;
                        c=c*10+s[i]-'0';
                }
                if(flag==1)
                        printf("%d + %d = %d\n",c-b,b,c);
                else if(flag==2)
                        printf("%d + %d = %d\n",a,c-a,c);
                else printf("%d + %d = %d\n",a,b,a+b);
        }
        return  0;
}


