from element import BasePageElement
from locators import MainPageLocators
from locators import ZalogujSiePageLocators

class SearchTextElement(BasePageElement):
    """This class gets the search text from the specified locator"""

    #The locator for search box where search string is entered
    locator = 'q'


class BasePage(object):
    """Base class to initialize the base page that will be called from all
    pages"""

    def __init__(self, driver):
        self.driver = driver


class MainPage(BasePage):
    """Home page action methods come here. I.e. Python.org"""

    #Declares a variable that will contain the retrieved text
    search_text_element = SearchTextElement()

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
    def is_title_matches(self):
        # Wartosc z head -> title
        return "Nazwa użytkowika" in self.driver.title
