#include<stdio.h>
#include<iostream.h>
#include<conio.h>
main()
{
int lembar;
float harga,diskon,jumlah,bayar,dibayar,kembalian,kurang;
cout<<"|========================================|"<<endl;
cout<<"|***********
**** WELCOME ****************|"<<endl;
cout<<"|========================================|"<<endl;
cout<<"|========================================|"<<endl;
cout<<"| Jumlah lembar fotocopy : " ; cin>>lembar;
gotoxy (42,5); cout <<"|"<<endl;
cout<<"| Har
ga perlembar : Rp. " ; cin>>harga;
gotoxy (42,6); cout <<"|"<<endl;
jumlah=lembar*harga;
diskon=jumlah*0.1;
bayar=jumlah
-
diskon;
cout<<"| Jumlah bayar : Rp. "<<jumlah<<endl;
gotoxy (42,7); cout <<"|"<<endl;
cout<<"| Diskon : Rp. "<<diskon<<endl;
go
toxy (42,8); cout <<"|"<<endl;
cout<<"| Besar pembayaran : Rp. "<<bayar<<endl;
gotoxy (42,9); cout <<"|"<<endl;
cout<<"|========================================|"<<endl;
cout<<"| Dibayar : Rp. "; cin>>dibayar;
gotoxy (42,11); cout <<"|"<<endl;
cout<<
"|========================================|"<<endl;
kembalian=dibayar
-
bayar;
kurang=bayar
-
dibayar;
if (dibayar>=bayar)
cout<<"| LUNAS, kembalian : Rp. "<<kembalian<<endl;
else
cout<<"| TIDAK LUNAS, kurang : Rp. "<<kurang<<endl;
gotoxy (42,13); cout
<<"|"<<endl;
cout<<"|========================================|
\
n"<<endl;
cout<<"|========================================|"<<endl;
cout<<"|************* TERIMA KASIH *************|"<<endl;
cout<<"|========================================|
\
n"<<endl;
co
ut<<""<<endl;
cout<<("MOHON DIMAKLUMI JIKA ADA KESALAHAN FOTOCOPY")<<endl;
getch();
}
