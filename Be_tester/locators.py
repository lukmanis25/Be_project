from selenium.webdriver.common.by import By

class MainPageLocators(object):
    """A class for main page locators. All main page locators should come here"""

    ZALOGUJ_SIE_BUTTON = (By.XPATH, "//a[@title='Zaloguj się do swojego konta klienta']")


class ZalogujSiePageLocators(object):
    NIE_MASZ_KONTA_BUTTON = (By.LINK_TEXT, "Nie masz konta? Załóż je tutaj")

class StworzKontoPageLocators(object):
    PAN_OPTION = (By.XPATH, '// *[ @ id = "customer-form"] / div / div[1] / div[1] / label[1]')
    CHECKBOX1 = (By.XPATH, '//*[@id="customer-form"]/div/div[8]/div[1]/span/label/input')
    CHECKBOX2 = (By.XPATH, '//*[@id="customer-form"]/div/div[10]/div[1]/span/label/input')
    ZAPISZ_BUTTON = (By.XPATH, '//*[@id="customer-form"]/footer/button')