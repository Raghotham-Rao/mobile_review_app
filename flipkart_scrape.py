from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from time import sleep
import urllib
import json

driver = webdriver.Chrome('/home/raghu/chromedriver')

driver.get('https://www.flipkart.com')
sleep(4)

driver.find_element_by_css_selector("._2AkmmA._29YdH8").click()
sleep(2)

srch_box = driver.find_element_by_xpath("//input[contains(@class, 'LM6RPg') and contains(@placeholder, 'Search for products, brands and more')]")
srch_box.send_keys('mobiles')
srch_box.send_keys(Keys.ENTER)
sleep(3)

driver.find_element_by_xpath("//div[contains(text(), 'Popularity')]").click()
sleep(2)

driver.find_element_by_xpath("//div[contains(@class, '_1GEhLw') and contains(text(), '4 GB')]").click()
sleep(2)

pages = 2
names = []
rat_rev_hlts = {}
while pages < 5:
	phones = driver.find_elements_by_xpath("//div[contains(@class, '_3O0U0u')]")
	for i in phones:
		name = i.find_element_by_css_selector("div._3wU53n").text.split('(')[0][:-1];
		if name not in rat_rev_hlts:
			ovr = i.find_element_by_css_selector("div.hGSR34").text;
			ratings = i.find_element_by_css_selector("span._38sUEc span:nth-child(1)").text;
			hlts_elems = i.find_elements_by_css_selector("li.tVe95H")
			hlts = []
			for i in hlts_elems:
				hlts.append(i.text)
			rat_rev_hlts[name] = {"Overall": ovr, "Ratings": ratings, "Highlights": hlts}
	driver.find_element_by_xpath("//div[contains(@class, '_2zg3yZ')]//a[contains(@class, '_2Xp0TH') and contains(text(), '"+str(pages)+"')]").click()
	pages += 1
	sleep(2)

names = rat_rev_hlts.keys();
print(len(names))

driver.get("https://www.gsmarena.com")
sleep(2)

details = dict()
subfeature_count = {}
for i in names:
	gsm_srchbox = driver.find_element_by_xpath("//input[contains(@id, 'topsearch-text')]")
	gsm_srchbox.send_keys(i)
	gsm_srchbox.send_keys(Keys.ENTER)
	sleep(2)
	# Getting the features
	driver.find_element_by_xpath("//div[contains(@id, 'review-body')]//img").click()
	sleep(2)
	features = driver.find_elements_by_xpath("//div[contains(@id, 'specs-list')]//table")
	fdict = {}
	for j in features:
		feature = j.find_element_by_css_selector("th")
		subfeatures = j.find_elements_by_css_selector(".ttl,.nfo")
		itr, key, val = 1, 0, 0
		sfdict = {}
		for k in subfeatures:
			if itr % 2 == 1:
				key = k.text
				key = feature.text + '_others' if key == ' ' else key
				if key not in subfeature_count:
					subfeature_count[key] = 0
				subfeature_count[key] += 1
			else:
				val = k.text
				sfdict[key] = val
			itr += 1
		fdict[feature.text] = sfdict
	fdict["images"] = []
	# Getting the images' href
	driver.find_element_by_css_selector("i.head-icon.icon-pictures").click()
	sleep(2)
	pics_list = driver.find_elements_by_css_selector("#pictures-list>*")
	for pic in pics_list:
		if "official images" in pic.text:
			continue
		if "our photos" in pic.text:
			break
		fdict["images"].append(pic.get_attribute("src"));
	for key, val in rat_rev_hlts[i].items():
		fdict[key] = val
	details[i] = fdict
	sleep(2)
#print(details)

with open("phone_details.json", 'w') as f:
	json.dump(details, f);