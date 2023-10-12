package com;

 public class Bank implements Des{
	 
	 int b,d;

	 int a=10000;
	
	public void deposite(int a) {
		this.a+=a;
		System.out.println("succesfully sent");
	}
	public void withdraw(int b) {
		this.a=this.a-b;
		System.out.println("withdraw success full");
	}
	
	public void checkbalance(){
		System.out.println("BALANCE IS "+a);
	}

	
	
	

}
