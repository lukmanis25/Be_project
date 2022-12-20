import unittest
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.options import Options
import page
import time

class PythonOrgSearch(unittest.TestCase):

    def setUp(self):

        self.driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))

        self.driver.get("https://192.168.56.10/presta")

        # Wyjście ze strony Niebezpieczna strona
        self.driver.implicitly_wait(30)
        self.driver.find_element('id', 'details-button').click()
        self.driver.find_element('id', 'proceed-link').click()

    #ZWIEKSZYC NUMER W EMAILU O JEDEN !!!
    def test_koszyk(self):
        # Przejscie z głownej strony na koszule
        main_page = page.MainPage(self.driver)
        main_page.click_koszule_button()

        koszule_page = page.KoszulePage(self.driver)
        bluzy_page = page.BluzyPage(self.driver)

        #koszule_page.click_bluzy_button() #USUNAC POTEM
        #Dodanie 5 koszul
        koszule_page.click_koszula1()

        koszula1_page = page.Koszula1Page(self.driver)
        koszula1_page.click_dodaj()
        koszula1_page.click_kont()
        koszula1_page.click_koszule()

        koszule_page.click_koszula2()

        koszula2_page = page.Koszula1Page(self.driver)
        koszula2_page.click_zwieksz()
        koszula2_page.click_dodaj()
        koszula2_page.click_kont()
        koszula2_page.click_koszule()

        koszule_page.click_koszula3()

        koszula3_page = page.Koszula1Page(self.driver)
        koszula3_page.click_dodaj()
        koszula3_page.click_kont()
        koszula3_page.click_koszule()

        koszule_page.click_koszula4()

        koszula4_page = page.Koszula1Page(self.driver)
        koszula4_page.click_dodaj()
        koszula4_page.click_kont()
        koszula4_page.click_koszule()

        koszule_page.click_koszula5()

        koszula5_page = page.Koszula1Page(self.driver)
        koszula5_page.click_dodaj()
        koszula5_page.click_kont()
        koszula5_page.click_koszule()

        koszule_page.click_bluzy_button()


        # Dodanie 5 bluz
        bluzy_page.click_bluza1()

        bluza1_page = page.Bluza1Page(self.driver)
        bluza1_page.click_zwieksz()
        bluza1_page.click_zwieksz()
        bluza1_page.click_dodaj()
        bluza1_page.click_kont()
        bluza1_page.click_bluzy()

        bluzy_page.click_bluza2()

        bluza2_page = page.Bluza1Page(self.driver)
        bluza2_page.click_dodaj()
        bluza2_page.click_kont()
        bluza2_page.click_bluzy()

        bluzy_page.click_bluza3()

        bluza3_page = page.Bluza1Page(self.driver)
        bluza3_page.click_dodaj()
        bluza3_page.click_kont()
        bluza3_page.click_bluzy()

        bluzy_page.click_bluza4()

        bluza4_page = page.Bluza1Page(self.driver)
        bluza4_page.click_dodaj()
        bluza4_page.click_kont()
        bluza4_page.click_bluzy()

        bluzy_page.click_bluza5()

        bluza5_page = page.Bluza1Page(self.driver)
        bluza5_page.click_dodaj()
        bluza5_page.click_kont()
        bluza5_page.click_bluzy()

        #USUNIECIE Z KOSZYKA
        bluzy_page.click_koszyk()
        koszyk_page = page.KoszykPage(self.driver)

        koszyk_page.click_usun()
        koszyk_page.click_main_page()

        # Przejscie z głownej strony na zaloguj się

        main_page = page.MainPage(self.driver)
        main_page.click_zaloguj_sie_button()

        # Przejscie z zaloguj się na rejestracje
        zaloguj_sie_page = page.ZalogujSiePage(self.driver)
        self.assertTrue(zaloguj_sie_page.is_title_matches(), "title nie pasuje")
        zaloguj_sie_page.click_nie_masz_konta_link()

        # Wypelnienie rejestracji
        stworz_konto_page = page.StworzKontoPage(self.driver)
        self.assertTrue(stworz_konto_page.is_title_matches(), "title nie pasuje")
        stworz_konto_page.click_pan_option()
        stworz_konto_page.podaj_imie_element = 'testuser'
        stworz_konto_page.podaj_nazwisko_element = 'testuser'
        stworz_konto_page.podaj_haslo_element = '12345'
        stworz_konto_page.podaj_email_element = 'testuser13@mail.com'  # zwiekszyc numer o jeden !!
        stworz_konto_page.click_checkbox1()
        stworz_konto_page.click_checkbox2()
        stworz_konto_page.click_zapisz_button()

        # Powrot do strony glownej po udanej rejestracji
        self.assertTrue(main_page.is_title_matches(), "title nie pasuje, testowe konto juz istnieje")

        main_page.click_koszyk()

        koszyk_page.click_realizacja()
        realizacja_page = page.RealizacjaPage(self.driver)
        realizacja_page.podaj_email = "adres"
        realizacja_page.podaj_kod_pocztowy = "82-300"
        realizacja_page.podaj_miasto = "jakies"
        realizacja_page.click_dalej()
        realizacja_page.click_kurier1()
        realizacja_page.click_dalej2()
        realizacja_page.click_przy_odbiorze()
        realizacja_page.click_zgoda()
        realizacja_page.click_zloz_zamowienie()
        realizacja_page.click_konto()

        konto_page = page.KontoPage(self.driver)
        konto_page.click_historia()


        time.sleep(5)


    def tearDown(self):
        pass
        self.driver.close()

if __name__ == "__main__":
    unittest.main()