from element import BasePageElement
from locators import MainPageLocators
from locators import ZalogujSiePageLocators
from locators import StworzKontoPageLocators

class PodajImieElement(BasePageElement):
    locator = 'firstname'

class PodajNazwiskoElement(BasePageElement):
    locator = 'lastname'

class PodajEmailElement(BasePageElement):
    locator = 'email'

class PodajHasloElement(BasePageElement):
    locator = 'password'


class BasePage(object):
    """Base class to initialize the base page that will be called from all
    pages"""

    def __init__(self, driver):
        self.driver = driver


class MainPage(BasePage):
    """Home page action methods come here. I.e. Python.org"""


    def is_title_matches(self):
        #Wartosc z head -> title
        return "Be_sklep" in self.driver.title

    def click_zaloguj_sie_button(self):
        element = self.driver.find_element(*MainPageLocators.ZALOGUJ_SIE_BUTTON)
        element.click()


class ZalogujSiePage(BasePage):
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


