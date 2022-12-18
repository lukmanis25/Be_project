import unittest
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.options import Options
import page

class PythonOrgSearch(unittest.TestCase):

    def setUp(self):

        self.driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))

        self.driver.get("https://192.168.56.10/presta")

        # Wyjście ze strony Niebezpieczna strona
        self.driver.implicitly_wait(30)
        self.driver.find_element('id', 'details-button').click()
        self.driver.find_element('id', 'proceed-link').click()

    #Testowy test
    def test_title(self):
        main_page = page.MainPage(self.driver)
        self.assertTrue(main_page.is_title_matches(), "title nie pasuje")

    #ZWIEKSZYC NUMER W EMAILU O JEDEN !!!
    def test_register(self):
        #Przejscie z głownej strony na zaloguj się
        main_page = page.MainPage(self.driver)
        main_page.click_zaloguj_sie_button()

        #Przejscie z zaloguj się na rejestracje
        zaloguj_sie_page = page.ZalogujSiePage(self.driver)
        self.assertTrue(zaloguj_sie_page.is_title_matches(), "title nie pasuje")
        zaloguj_sie_page.click_nie_masz_konta_link()

        #Wypelnienie rejestracji
        stworz_konto_page = page.StworzKontoPage(self.driver)
        self.assertTrue(stworz_konto_page.is_title_matches(), "title nie pasuje")
        stworz_konto_page.click_pan_option()
        stworz_konto_page.podaj_imie_element = 'testuser'
        stworz_konto_page.podaj_nazwisko_element = 'testuser'
        stworz_konto_page.podaj_haslo_element = '12345'
        stworz_konto_page.podaj_email_element = 'testuser4@mail.com' #zwiekszyc numer o jeden !!
        stworz_konto_page.click_checkbox1()
        stworz_konto_page.click_checkbox2()
        stworz_konto_page.click_zapisz_button()

        #Powrot do strony glownej po udanej rejestracji
        self.assertTrue(main_page.is_title_matches(), "title nie pasuje, testowe konto juz istnieje")


    def tearDown(self):
        self.driver.close()

if __name__ == "__main__":
    unittest.main()