import xlrd
import xlwt
import urllib.request
import bs4 as bs
import re

workbook = xlrd.open_workbook("Input.xlsx")

worksheet = workbook.sheet_by_name("CompleteListFilingsAllInfo")
workbook2 = xlwt.Workbook(encoding="utf-8")
CDS = {'CDS Text':'','Expiration Date':'','Notional Amount (000s)':'','Unrealized Appreciation/ (Depreciation) (000s)':''}
sheet1=workbook2.add_sheet("phase 1",cell_overwrite_ok=True)
sheet2=workbook2.add_sheet("phase 2",cell_overwrite_ok=True)
sheet1.write(0,0,"ID")
sheet1.write(0,1,"CIK")
sheet1.write_merge(0,0,2,3,"Company Name")
sheet1.write(0,4,"Date Filed")
sheet1.write_merge(0,0,5,6,"Filename")
sheet1.write(0,7,"Form Type")
sheet1.write_merge(0,0,8,12,"URL")
sheet2.write(0,0,"ID")
sheet2.write(0,1,"CIK")
sheet2.write_merge(0,0,2,3,"Company Name")
sheet2.write(0,4,"Date Filed")
sheet2.write_merge(0,0,5,6,"Filename")
sheet2.write(0,7,"Form Type")
sheet2.write_merge(0,0,8,12,"URL")
sheet2.write_merge(0,0,13,17,"CDS Text")
sheet2.write_merge(0,0,18,19,"Underlying")
sheet2.write_merge(0,0,20,23,"Exact Underlying")
sheet2.write(0,24,"Counterpart")
sheet2.write(0,25,"CDS Transaction")
sheet1.write_merge(0,0,13,17,"Attributes")
sheet1.write_merge(0,0,18,24,"Values")
pattern = re.compile("\nCredit Default Swap\n\n")
total_rows = worksheet.nrows
#print(total_rows)
urllist = [];

x=1
y=1
for count in range(1,total_rows,1):
    
    data = {'id':count,'CIK':worksheet.cell(count,0).value,'Company Name':worksheet.cell(count,1).value,'Date Filed':worksheet.cell(count,2).value,'Filename':worksheet.cell(count,3).value,'Form Type':worksheet.cell(count,4).value,'URL':worksheet.cell(count,5).value}
    url = data['URL'] + ''
    print(url)
    req = urllib.request.urlopen(url).read()
    soup = bs.BeautifulSoup(req,'lxml')
    pattern = re.compile("\nCredit Default Swap\n\n")
    tables = soup.find_all('table')
    CDSes = []
    flag = 0            
    for table in tables:
        table_rows = table.find_all('tr')
        
        for tr in table_rows:
            tds = tr.find_all('td')
            for td in tds:
                
                if pattern.match(td.text):
                    flag =1
                    trnext = tr.findNext('tr')
                    trprev = tr.find_previous_sibling('tr')
                    tdses = trprev.find_all('td')
                    notatn= (tdses[3].text.strip())
                    app = tdses[5].text.strip()
                    tdses = trnext.find_all('td')
                    cdstext = tdses[0].text.strip()
                    for i in range(4):
                        sheet1.write(x,0,data['id'])
                        sheet1.write(x,1,data['CIK'])
                        sheet1.write(x,2,data['Company Name'])
                        sheet1.write(x,4,data['Date Filed'])
                        sheet1.write(x,5,data['Filename'])
                        sheet1.write(x,7,data['Form Type'])
                        sheet1.write(x,8,data['URL'])
                        if i==0:
                            sheet1.write(x,13,'CDS Text')
                            sheet1.write(x,18,cdstext)
                        elif i==1:
                            sheet1.write(x,13,'Expiration Date')
                            sheet1.write(x,18,tdses[1].text.strip())
                        elif i==2:
                            sheet1.write(x,13,str(notatn))
                            sheet1.write(x,18,tdses[3].text.strip())
                        elif i==3:
                            sheet1.write(x,13,str(app))
                            sheet1.write(x,18,tdses[5].text.strip())
                        x=x+1
                        
                    sheet2.write(y,0,data['id'])
                    sheet2.write(y,1,data['CIK'])
                    sheet2.write(y,2,data['Company Name'])
                    sheet2.write(y,4,data['Date Filed'])
                    sheet2.write(y,5,data['Filename'])
                    sheet2.write(y,7,data['Form Type'])
                    sheet2.write(y,8,data['URL'])
                    sheet2.write(y,13,cdstext)
                    findtext = 'notional amount of ';
                    startindex = cdstext.find(findtext)
                    startindex = startindex + len(findtext)
                    
                    if cdstext.find('Receive from Morgan Stanley') != -1:
                        filltext1 = cdstext[startindex:len(cdstext)]
                        findtext1 = ' and pay'
                        endindex = filltext1.find(findtext1)
                        filltext2 = filltext1[0:endindex]
                        filltext3 = filltext2[0:re.search('\d',filltext1).start()] 
                        sheet2.write(y,18,filltext3)
                        sheet2.write(y,20,filltext2)
                        sheet2.write(y,25,'Sell (provide insurance)')
                    else:
                        filltext1 = cdstext[startindex:len(cdstext)]
                        filltext2 =  filltext1[0:re.search('\d',filltext1).start()]
                        findtext1  = 'and pay '
                        startindex = cdstext.find(findtext1)+len(findtext1)
                        findtext2 = 'upon default'
                        endindex = cdstext.find(findtext2)
                        filltext3 = cdstext[startindex:endindex]
                        sheet2.write(y,18,filltext2)
                        sheet2.write(y,20,filltext1)
                        sheet2.write(y,24,filltext3)
                        sheet2.write(y,25,'Buy (get insurance)')       
                    
                    y = y+1
    if flag == 0:
        sheet1.write(x,0,data['id'])
        sheet1.write(x,1,data['CIK'])
        sheet1.write(x,2,data['Company Name'])
        sheet1.write(x,4,data['Date Filed'])
        sheet1.write(x,5,data['Filename'])
        sheet1.write(x,7,data['Form Type'])
        sheet1.write(x,8,data['URL'])
        sheet1.write(x,13,"NA")
        sheet1.write(x,18,"NA")
        x=x+1
    '''if len(CDSes)!=0:
         for cds in CDSes:
            for key, value in cds.items():
                sheet1.write(x,0,data['id'])
                sheet1.write(x,1,data['CIK'])
                sheet1.write(x,2,data['Company Name'])
                sheet1.write(x,4,data['Date Filed'])
                sheet1.write(x,5,data['Filename'])
                sheet1.write(x,7,data['Form Type'])
                sheet1.write(x,8,data['URL'])
                sheet1.write(x,13,str(key))
                sheet1.write(x,18,str(value))
                x=x+1
    else:
        sheet1.write(x,0,data['id'])
        sheet1.write(x,1,data['CIK'])
        sheet1.write(x,2,data['Company Name'])
        sheet1.write(x,4,data['Date Filed'])
        sheet1.write(x,5,data['Filename'])
        sheet1.write(x,7,data['Form Type'])
        sheet1.write(x,8,data['URL'])
        sheet1.write(x,13,"NA")
        sheet1.write(x,18,"NA")
        x=x+1'''

workbook2.save("phase 1 output.xls")
