from selenium.webdriver.common.by import By

class MainPageLocators(object):
    """A class for main page locators. All main page locators should come here"""

    ZALOGUJ_SIE_BUTTON = (By.XPATH, "//a[@title='Zaloguj się do swojego konta klienta']")


class ZalogujSiePageLocators(object):
    NIE_MASZ_KONTA_BUTTON = (By.LINK_TEXT, "Nie masz konta? Załóż je tutaj")