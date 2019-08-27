<?php
namespace eagle\modules\carrier\openapi;

use eagle\components\OpenApi;
use eagle\modules\carrier\apihelpers\ApiHelper;

/**
 * ����������Ϣ�ӿ�
 *
 * author: rice
 * date: 2015-08-17
 * version: 0.1
 */
class Base extends OpenApi {

    /*
     * ��ȡϵͳ��������Ϣ
     *
     * author: rice
     * date: 2015-08-17
     * version: 0.1
     *
     * �������: $v string ��ѡ Ĭ��ֵ: 0.1 �汾��
     *
     * ����ֵ(JSON):
     * �����룺��
     *
     * data =>managedb��sys_carrier��
     *      key: ����carrier_code
     *      value:carrier_name�ֶ�
        {
            "response": {
                "code": 0,
                "msg": "",
                "data": {
                    "lb_4px": "���ķ�",
                    "lb_4pxOversea": "���ķ�(�����)",
                    "lb_birdsysOversea": "�������(�����)",
                    "lb_chukouyi": "������",
                    "lb_chukouyiOversea": "������(�����)",
                    "lb_CNE": "CNE",
                    "lb_epacket": "��̫ƽ̨ CNPOST",
                    "lb_IEUB": "����E�ʱ�",
                    "lb_SF": "˳��",
                    "lb_tiesanjiaoOverSea": "������(�����)",
                    "lb_winit": "����ͨISP",
                    "lb_winitOversea": "����ͨ(�����)",
                    "lb_yanwen": "����",
                    "lb_yilong": "����"
                }
            }
        }
     */
    public function getCarriers($v = '0.1') {
        $result = ApiHelper::getCarriers();
        echo $this->output($result);
        exit;
    }


    /*
     * ��ȡ�û������������Ϣ
     *
     * author: rice
     * date: 2015-08-17
     * version: 0.1
     *
     * �������: $v string ��ѡ Ĭ��ֵ: 0.1 �汾��
     *
     * ����ֵ(JSON):
     * �����룺��
     *
     * data =>user��sys_shipping_service��
     *      key: ����id
     *      value:service_name�ֶ�
        {
            "response": {
                "code": 0,
                "msg": "",
                "data": {
                    "1": "���ķ�-4px�����˺�-DHL����",
                    "2": "���ķ�",
                    "3": "���ķ�-4px�����˺�-4PXר��ARMX",
                    "4": "���ķ�-4px�����˺�-4PX����ͨ�Һ�",
                    "6": "���ķ�-4px�����˺�-�¼���С���Һ�",
                    "47": "������-ck1�����˺�-���ʴ��",
                    "55": "������-ck1�����˺�-�Ϻ��������ʹҺ�",
                }
            }
        }
     */
    public function getShippingServices($v = '0.1', $all = false) {
        $result = ApiHelper::getShippingServices($all);
        echo $this->output($result);
        exit;
    }


    /*
     * ��ȡ�û��������˺���Ϣ
     *
     * author: rice
     * date: 2015-08-17
     * version: 0.1
     *
     * �������: $v string ��ѡ Ĭ��ֵ: 0.1 �汾��
     *
     * ����ֵ(JSON):
     * �����룺��
     *
     * data =>user��sys_carrier_account��
     *      key: ����id
     *      value:carrier_name�ֶ�
        {
            "response": {
                "code": 0,
                "msg": "",
                "data": {
                    "1": "4px�����˺�",
                    "2": "ck1�����˺�",
                    "3": "4px����ֲ����˺�",
                    "4": "yw�����˺�",
                    "5": "yl�����˺�",
                    "6": "CNE�����˺�",
                }
            }
        }
     */
    public function getCarrierAccounts($v = '0.1') {
        $result = ApiHelper::getCarrierAccounts();
        echo $this->output($result);
        exit;
    }


    /*
     * ��ȡ����ֿ���Ϣ���˺ż��ֿ���Ϣ
     *
     * author: rice
     * date: 2015-08-17
     * version: 0.1
     *
     * �������: $v string ��ѡ Ĭ��ֵ: 0.1 �汾��
     *
     * ����ֵ(JSON):
     * �����룺��
     *
     * data =>web/docs/����������ļ�
     *      key: user��sys_carrier_account������id
        {
            "response": {
                "code": 0,
                "msg": "",
                "data": {
                    "3": {
                        "account_name": "4px����ֲ����˺�",
                        "warehouse": {
                            "USLA": "������ɼ��",
                            "DEWH": "�¹���",
                            "AUSY": "���޲�",
                            "UKLH": "Ӣ����"
                        }
                    },
                    "8": {
                        "account_name": "��������˺�",
                        "warehouse": {
                            "1": "UK1 Ӣ��һվ",
                            "10": "AU ����վ",
                            "11": "CN ����վ",
                            "12": "DE �¹�վ",
                            "14": "GI ֱ������վ"
                        }
                    },
                    "9": {
                        "account_name": "�����ǲ����˺�",
                        "warehouse": {
                            "YORK": "����PA��",
                            "GUANGZHOU": "�����ǹ��ݲ�",
                            "ZZ": "֣�ݲ�",
                            "SHANGHAI": "�Ϻ���"
                        }
                    }
                }
            }
        }
     */
    public function getWerehouseAccounts($v = '0.1') {
        $result = ApiHelper::getWerehouseAccounts();
        echo $this->output($result);
        exit;
    }
}