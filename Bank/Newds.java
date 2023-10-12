package com;
import java.util.*;

public class Newds extends Bank {
	public static void main(String [] args) {
		Bank b= new Newds();
	Scanner sc=new Scanner(System.in);
	while(true) {
	
	System.out.println("WELCOME TO CANARA BANK");
	System.out.println("Please Enter your option");
	System.out.println("1.Deposite\n2.withdraw\n3.CheckBalance\n4.Exit\n");
	System.out.println("enter your Option");
	int k=sc.nextInt();
	switch(k) {
	case 1:
		System.out.println("ENTER THE AMOUT:");
		int dps=sc.nextInt();
		b.deposite(dps);
		break ;
		
	case 2:
		System.out.println("ENTER THE AMOUT TO WITHDRAW:\n");
		int with=sc.nextInt();
		if(with>b.a) {
			System.out.println("insufficient Balence");
		}
		else {
			b.withdraw(with);
			System.out.println("Amount withdrawn"+with+"\n the available balance is"+b.a);
		}
		
		
		break ;
		
	case 3:
		
		b.checkbalance();
		break ;
		
	case 4:
		System.exit(0);
		
		
	default:
		System.out.println("please select a correct option");
		
	}
	
	
	
	}
		
	}
	

}
