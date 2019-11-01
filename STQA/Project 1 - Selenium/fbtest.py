import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys

loginname = 'yashgarudkar@gmail.com'
password = 'testpassword'
chrdriv = "E:\\Yash\\Yash\\chromedriver_win32\\chromedriver.exe"
driver = webdriver.Chrome(chrdriv)

driver.get('http://www.facebook.com')
driver.maximize_window()
print("Opened Facebook")
time.sleep(1)

emailid = driver.find_element_by_id("email")
emailid.send_keys(loginname)
print("Email Id entered")
time.sleep(1)

passw = driver.find_element_by_id('pass')
passw.send_keys(password)
print("Password entered")
time.sleep(2)

nextButton = driver.find_element_by_id('loginbutton')
nextButton.click()
print('Logged in successfully')
time.sleep(2)

notif = driver.find_element_by_xpath('/html/body/div[1]/div[2]/div/div[1]/div/div/div/div[2]/div[2]/div[3]/div/a/div')
notif.click()
print('Notifications Seen successfully')
time.sleep(4)

notif = driver.find_element_by_xpath('/html/body/div[1]/div[2]/div/div[1]/div/div/div/div[2]/div[2]/div[3]/div/a/div')
notif.click()
print('Back in timeline')
time.sleep(2)

profile = driver.find_element_by_xpath('/html/body/div[1]/div[2]/div/div[1]/div/div/div/div[2]/div[1]/div[1]/div/a')
profile.click()
print('Profile opened')
time.sleep(3)

accsetts = driver.find_element_by_id('logoutMenu')
accsetts.click()
print('Logout menu clicked')
time.sleep(15)

logout = driver.find_element_by_xpath('//span[@class="_54nh"][text()="Log Out"]')
#logout= driver.find_element_by_xpath('/html/body/div[25]/div/div/div/div/div[1]/div/div/ul/li[19]/a')
logout.click()
print('Logged out successfully!')
time.sleep(2)

print('Now Closing Window')
time.sleep(3)

driver.close()
print('Test carried out successfully!')