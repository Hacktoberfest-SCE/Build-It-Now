type MyHashMap struct {
    array  []int
}


func Constructor() MyHashMap {
   return MyHashMap{
        array : make([]int, 1000001),
    }
}

func (this *MyHashMap) Put(key int, value int)  {
    this.array[key] = value+1
}


func (this *MyHashMap) Get(key int) int {
    return this.array[key]-1
}


func (this *MyHashMap) Remove(key int)  {
    this.array[key] = 0
}
