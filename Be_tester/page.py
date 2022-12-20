from element import BasePageElement
from locators import MainPageLocators
from locators import ZalogujSiePageLocators
from locators import StworzKontoPageLocators
from locators import KoszulePageLocators
from locators import BluzyPageLocators
from locators import Koszula1PageLocators
from locators import Bluza1PageLocators
from locators import KoszykPageLocators
from locators import RealizacjaPageLocators
from locators import KontoPageLocators

class PodajImieElement(BasePageElement):
    locator = 'firstname'

class PodajNazwiskoElement(BasePageElement):
    locator = 'lastname'

class PodajEmailElement(BasePageElement):
    locator = 'email'

class PodajHasloElement(BasePageElement):
    locator = 'password'

class PodajIloscElement(BasePageElement):
    locator = 'qty'

class PodajAdresElement(BasePageElement):
    locator = 'address1'

class PodajKodPocztowyElement(BasePageElement):
    locator = 'postcode'

class PodajMiastoElement(BasePageElement):
    locator = 'city'


class BasePage(object):
    """Base class to initialize the base page that will be called from all
    pages"""

    def __init__(self, driver):
        self.driver = driver


class MainPage(BasePage):


    def is_title_matches(self):
        #Wartosc z head -> title
        return "BiznesElektroniczny" in self.driver.title

    def click_zaloguj_sie_button(self):
        element = self.driver.find_element(*MainPageLocators.ZALOGUJ_SIE_BUTTON)
        element.click()

    def click_koszule_button(self):
        element = self.driver.find_element(*MainPageLocators.KOSZULE_BUTTON)
        element.click()

    def click_koszyk(self):
        element = self.driver.find_element(*MainPageLocators.KOSZYK_BUTTON)
        element.click()



class ZalogujSiePage(BasePage):
    podaj_email = PodajEmailElement()
    podaj_haslo = PodajHasloElement()

    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_nie_masz_konta_link(self):
        element = self.driver.find_element(*ZalogujSiePageLocators.NIE_MASZ_KONTA_BUTTON)
        element.click()

class StworzKontoPage(BasePage):

    podaj_imie_element = PodajImieElement()
    podaj_nazwisko_element = PodajNazwiskoElement()
    podaj_email_element = PodajEmailElement()
    podaj_haslo_element = PodajHasloElement()

    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_pan_option(self):
        element = self.driver.find_element(*StworzKontoPageLocators.PAN_OPTION)
        element.click()

    def click_checkbox1(self):
        element = self.driver.find_element(*StworzKontoPageLocators.CHECKBOX1)
        element.click()

    def click_checkbox2(self):
        element = self.driver.find_element(*StworzKontoPageLocators.CHECKBOX2)
        element.click()

    def click_zapisz_button(self):
        element = self.driver.find_element(*StworzKontoPageLocators.ZAPISZ_BUTTON)
        element.click()

class KoszulePage(BasePage):
    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_bluzy_button(self):
        element = self.driver.find_element(*KoszulePageLocators.BLUZY_BUTTON)
        element.click()

    def click_koszula1(self):
        element = self.driver.find_element(*KoszulePageLocators.KOSZULA1)
        element.click()

    def click_koszula2(self):
        element = self.driver.find_element(*KoszulePageLocators.KOSZULA2)
        element.click()
    def click_koszula3(self):
        element = self.driver.find_element(*KoszulePageLocators.KOSZULA3)
        element.click()
    def click_koszula4(self):
        element = self.driver.find_element(*KoszulePageLocators.KOSZULA4)
        element.click()
    def click_koszula5(self):
        element = self.driver.find_element(*KoszulePageLocators.KOSZULA5)
        element.click()



class Koszula1Page(BasePage):
    podaj_ilosc = PodajIloscElement()

    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_dodaj(self):
        element = self.driver.find_element(*Koszula1PageLocators.DODAJ_BUTTON)
        element.click()

    def click_zwieksz(self):
        element = self.driver.find_element(*Koszula1PageLocators.ZWIEKSZ_BUTTON)
        element.click()

    def click_kont(self):
        element = self.driver.find_element(*Koszula1PageLocators.KONTYNUUJ_BUTTON)
        element.click()

    def click_koszule(self):
        element = self.driver.find_element(*Koszula1PageLocators.KOSZULE_BUTTON)
        element.click()

class BluzyPage(BasePage):
    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_koszyk(self):
        element = self.driver.find_element(*BluzyPageLocators.KOSZYK_BUTTON)
        element.click()


    def click_bluza1(self):
        element = self.driver.find_element(*BluzyPageLocators.BLUZA1)
        element.click()

    def click_bluza2(self):
        element = self.driver.find_element(*BluzyPageLocators.BLUZA2)
        element.click()
    def click_bluza3(self):
        element = self.driver.find_element(*BluzyPageLocators.BLUZA3)
        element.click()
    def click_bluza4(self):
        element = self.driver.find_element(*BluzyPageLocators.BLUZA4)
        element.click()
    def click_bluza5(self):
        element = self.driver.find_element(*BluzyPageLocators.BLUZA5)
        element.click()

class Bluza1Page(BasePage):
    podaj_ilosc = PodajIloscElement()

    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_dodaj(self):
        element = self.driver.find_element(*Bluza1PageLocators.DODAJ_BUTTON)
        element.click()

    def click_zwieksz(self):
        element = self.driver.find_element(*Bluza1PageLocators.ZWIEKSZ_BUTTON)
        element.click()

    def click_kont(self):
        element = self.driver.find_element(*Bluza1PageLocators.KONTYNUUJ_BUTTON)
        element.click()

    def click_bluzy(self):
        element = self.driver.find_element(*Bluza1PageLocators.BLUZY_BUTTON)
        element.click()

class KoszykPage(BasePage):


    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_usun(self):
        element = self.driver.find_element(*KoszykPageLocators.USUN_BUTTON)
        element.click()

    def click_main_page(self):
        element = self.driver.find_element(*KoszykPageLocators.MAIN_PAGE_BUTTON)
        element.click()

    def click_realizacja(self):
        element = self.driver.find_element(*KoszykPageLocators.REALIZACJA_BUTTON)
        element.click()

class RealizacjaPage(BasePage):
    podaj_email = PodajAdresElement()
    podaj_kod_pocztowy = PodajKodPocztowyElement()
    podaj_miasto = PodajMiastoElement()

    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_dalej(self):
        element = self.driver.find_element(*RealizacjaPageLocators.DALEJ_BUTTON)
        element.click()

    def click_dalej2(self):
        element = self.driver.find_element(*RealizacjaPageLocators.DALEJ2_BUTTON)
        element.click()

    def click_kurier1(self):
        element = self.driver.find_element(*RealizacjaPageLocators.KURIER1_BUTTON)
        element.click()

    def click_przy_odbiorze(self):
        element = self.driver.find_element(*RealizacjaPageLocators.PRZY_ODBIORZE_BUTTON)
        element.click()

    def click_zgoda(self):
        element = self.driver.find_element(*RealizacjaPageLocators.ZGODA_BUTTON)
        element.click()

    def click_zloz_zamowienie(self):
        element = self.driver.find_element(*RealizacjaPageLocators.ZLOZ_ZAMOWIENIE_BUTTON)
        element.click()

    def click_konto(self):
        element = self.driver.find_element(*RealizacjaPageLocators.KONTO_BUTTON)
        element.click()

class KontoPage(BasePage):
    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title

    def click_historia(self):
        element = self.driver.find_element(*KontoPageLocators.HISTORIA_BUTTON)
        element.click()







