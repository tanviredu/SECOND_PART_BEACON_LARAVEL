from django.shortcuts import render,redirect
## this module is for testing
from django.http import HttpResponse

## this is where all the logic goes
import requests
from bs4 import BeautifulSoup

## add searching by doing to the website using http response

def home(request):
    return render(request,'public/search.html')

def Bagdoom(keyword):
    url="https://www.bagdoom.com/catalogsearch/result/?q="+str(keyword)
    r = requests.get(url)
    soup = BeautifulSoup(r.content, 'lxml')
    ans2= soup.findAll('div', attrs={'class':'catalog_hover'})
    d={}
    for item in ans2:
        a=item.find('h2', attrs={'class':'product-name'}).text.strip()
        b=item.find('div', attrs={'class':'price-box'}).text[:20].strip()
        d.update({a:b})
    return d



# processing a preety url

def process(request):
    if request.method == "POST":
        ## take the value
        keyword = str(request.POST['keyword'])
        ##return HttpResponse(keyword)
        text = Bagdoom(keyword)
        context = {'text':text}
        return render(request,'public/result.html',context)
