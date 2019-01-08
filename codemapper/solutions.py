#Q1:
def fact(n):
    f=1
    if n>0:
        for i in range(1, n+1):
            f = f * i
        return f


def list_sum(l):
    sum = 0
    for i in range(len(l)):
        sum += l[i]
    return sum

def end_by_zero(n):
    if n%10 == 0:
        return True
    return False

def tuple_eq(n):
    if n[0] == n[1]:
        return True
    return False

def ZipMerge(l):
    result =[]
    for (i,j) in zip(l[0],l[1]):
        result.append(i)
        result.append(j)
    return result
