def Process(x):
    x = x.split() 
    school = x[0].replace("我是", "")
    print(f"學校:{school}\n姓名:{x[2]}")


if __name__ == "__main__":
    Name = "我是靜宜大學 行銷四B 翁瑋聖"
    Process(Name)