<template>
  <div>
    <div>{{ result }}</div>
    <form v-on:submit="onSubmitForm">
      <input type="text" minlength="4" maxlength="4" ref="answer" v-model="value" />
      <button>입력</button>
    </form>
    <div>시도 : {{ tries.length }}</div>
    <ul>
      <li v-for="t in tries">
        <div>{{ t.try }}</div>
        <div>{{ t.result }}</div>
      </li>
    </ul>
  </div>
</template>

<script>
  const getNumbers = () => {
    const candidates = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    const array = [];
    for (let i = 0; i < 4; i += 1) {
      const chosen = candidates.splice(Math.floor(Math.random() * (9 - i)), 1)[0];
      array.push(chosen);
    }
    return array;
  };

  export default {
    data() {
      return {
        answer: getNumbers(),
        tries: [],
        value: '',
        result: '',
      }
    },
    methods: {
      onSubmitForm(e) { //문자열, 배열 주의
        e.preventDefault();
        if (this.value === this.answer.join('')) { //정답을 맞췄을 때
          this.tries.push ({
            try: this.value,
            result: '홈런',
          });
          this.result = '홈런';
          alert('게임을 다시 시작합니다.');
          this.value = '';
          this.tries = [];
          this.answer = getNumbers();
          this.$refs.answer.focus();
        } else { //정답 틀렸을 때
            
          if (this.tries.length >= 9) { //10번째 시도했을 때
            this.result = `10번 넘게 시도하여서 패배입니다. 답은 ${this.answer.join(',')}였습니다.`;
            this.value = '';
            alert('게임을 다시 시작합니다.');
            this.tries = [];
            this.answer = getNumbers();
            this.$refs.answer.focus();   
          }
          let strike = 0;
          let ball = 0;
          //숫자 배열로 바꾸는 코드
          const answerArray = this.value.split('').map(v => parseInt(v));
          for (let i = 0; i < 4; i += 1) {
            if (answerArray[i] === this.answer[i]) { //숫자 자리수 모두 정답
              strike++;
            } else if (this.answer.includes(answerArray[i])) { //숫자만 정답
              ball++;
            }
          }
          this.tries.push({
            try: this.value,
            result: `${strike} 스트라이크, ${ball} 볼입니다.`,
          });
          this.value = '';
          this.$refs.answer.focus(); 
        }
      }
    },
  }
  
</script>

<style>

</style>