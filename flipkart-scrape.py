from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from time import sleep
import urllib

driver = webdriver.Chrome('/home/raghu/Desktop/chromedriver')

driver.get('https://www.flipkart.com')
sleep(4)

driver.find_element_by_css_selector("._2AkmmA._29YdH8").click()
sleep(2)

srch_box = driver.find_element_by_xpath("//input[contains(@class, 'LM6RPg') and contains(@placeholder, 'Search for products, brands and more')]")
srch_box.send_keys('mobiles')
srch_box.send_keys(Keys.ENTER)
sleep(2)

driver.find_element_by_xpath("//div[contains(text(), 'Popularity')]").click()
sleep(2)

driver.find_element_by_xpath("//div[contains(@class, '_1GEhLw') and contains(text(), '4 GB')]").click()
sleep(2)

# driver.find_element_by_xpath("//div[contains(@class, '_2yccxO') and contains(@class, 'D0YrLF')]").click()
# driver.find_element_by_xpath("//div[contains(@class, '_1GEhLw') and contains(text(), '32 - 63.9 GB')]").click()
# sleep(2)
# driver.find_element_by_xpath("//div[contains(@class, '_1GEhLw') and contains(text(), '64 - 127.9 GB')]").click()
# sleep(2)

# driver.find_element_by_xpath("//div[contains(@class, '_2yccxO') and contains(@class, 'D0YrLF') and contains(text(), 'Battery Capacity')]").click()
# driver.find_element_by_xpath("//div[contains(@class, '_1GEhLw') and contains(text(), '4000 - 4999 mAh')]").click()
# sleep(2)

max_rating = 0
elem = None
phones = driver.find_elements_by_css_selector("._38sUEc span:nth-child(1)")
for i in phones:
	rating = int(''.join(i.text.split()[0].split(',')))
	if rating > max_rating:
		max_rating = rating
		elem = i
print(max_rating)
sleep(2)

elem.click()

sleep(3)

driver.find_element_by_css_selector("._3BTv9X._3iN4zu img[alt='Redmi Note 7 Pro (Space Black, 64 GB)']").click()
