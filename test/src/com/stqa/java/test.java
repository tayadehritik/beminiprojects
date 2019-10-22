package com.stqa.java;

import org.openqa.selenium.By; 
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class test {

	public static void main(String[] args) {
		
		System.setProperty("webDriver.chrome.driver", "E:\\Yash\\Yash\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
		driver.get("http://mail.google.com");
		driver.manage().window().maximize();
		driver.findElement(By.id("identifierId")).sendKeys("yashgarudkar@gmail.com");
		driver.findElement(By.className("RveJvd snByac")).click();
		String at=driver.getTitle();
		String et="gmail";
		driver.close();
		if(at.equalsIgnoreCase(et))
		{
			System.out.println("Test succesfull!");
		}
		else
		{
			System.out.println("Unsuccessful;-(");
		}
	}

}
