from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.options import Options

#Ustawienie chroma
chrome_options = Options()
chrome_options.add_experimental_option("detach", True) #żeby się nie wyłączała przegladarka

driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()), options=chrome_options)
driver.get("https://192.168.56.10/presta")


#Wyjście ze strony Niebezpieczna strona
driver.implicitly_wait(30)
driver.find_element('id', 'details-button').click()
driver.find_element('id', 'proceed-link').click()

#